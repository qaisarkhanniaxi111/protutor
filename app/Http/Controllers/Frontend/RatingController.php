<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GroupLesson;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function groupLessonFilter(Request $request)
    {
        $query = GroupLesson::with(['teachLevel', 'subject', 'tutor','tutorDetails', 'gallery']);
        if (!empty($request->subject)) {
            $query->where('subject_id', $request->subject);
        }
        if (!empty($request->teaches_level)) {
            $query->where('teach_level_id', $request->teaches_level);
        }
        if (!empty($request->sort_by)) {
            $query->orderBy('title', $request->sort_by === 'ascending' ? 'ASC' : 'DESC');
        }
        if (!empty($request->date)) {
            $query->whereDate('class_start_date', '>=', date('Y-m-d', strtotime($request->date) ));
        }
        if (!empty($request->price)) {
            $priceRange = explode('-', $request->price);

            if (count($priceRange) === 2) {
                $minPrice = $priceRange[0];
                $maxPrice = $priceRange[1];

                $minPriceInCents = $minPrice * 100;
                $maxPriceInCents = $maxPrice * 100;

                $query->whereBetween('price', [$minPriceInCents, $maxPriceInCents]);
            } else {
                $minPrice = trim($request->price, '+');
                $minPriceInCents = $minPrice * 100;
                $query->where('price', '>', $minPriceInCents);
            }
        }

        $filtered_Data = $query->get();

        $viewRender = view('frontend.includes.group_lesson_card', ['groupLessons' => $filtered_Data])->render();

        return response()->json(['html' => $viewRender]);
    }
    public function TodayGroupLessonFilter(Request $request)
    {
        try {
            $todayDate = now()->format('Y-m-d');
            $query = GroupLesson::with(['teachLevel', 'subject', 'tutor','tutorDetails', 'gallery'])->whereDate('class_start_date', $todayDate);

            if (!empty($request->subject)) {
                $query->where('subject_id', $request->subject);
            }
            if (!empty($request->teaches_level)) {
                $query->where('teach_level_id', $request->teaches_level);
            }
            if (!empty($request->sort_by)) {
                $query->orderBy('title', $request->sort_by === 'ascending' ? 'ASC' : 'DESC');
            }
            if (!empty($request->date)) {
                $query->whereDate('class_start_date','<=', $request->date);
            }
            if (!empty($request->price)) {
                $priceRange = explode('-', $request->price);

                if (count($priceRange) === 2) {
                    $minPrice = $priceRange[0];
                    $maxPrice = $priceRange[1];

                    $minPriceInCents = $minPrice * 100;
                    $maxPriceInCents = $maxPrice * 100;

                    $query->whereBetween('price', [$minPriceInCents, $maxPriceInCents]);
                } else {
                    $minPrice = trim($request->price, '+');
                    $minPriceInCents = $minPrice * 100;
                    $query->where('price', '>', $minPriceInCents);
                }
            }

        $filteredData = $query->get();

        $viewRender = view('frontend.includes.today_group_lesson_card', ['todayGroupLessons' => $filteredData])->render();

        return response()->json(['html' => $viewRender]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500); // Handle any server-side errors
        }

    }

    public function submitReview(Request $request)
    {
        // Validate the input
        $request->validate([
            
            'student_id' => 'required',
            'rating' => 'required|in:1,2,3,4,5',
            'review' => 'required|max:2000',
        ]);
        
        $newLessonRating = new Rating;
        $newLessonRating->student_id=$request->student_id;
        if($request->group_lesson_id){
        $newLessonRating->group_lesson_id=$request->group_lesson_id;
        }else{
            $newLessonRating->order_id=$request->order_id;
        }
        $newLessonRating->rating=$request->rating;
        $newLessonRating->review=$request->review;
        $newLessonRating->save();
        return redirect()->back();
    }
}
