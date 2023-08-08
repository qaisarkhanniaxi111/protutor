

@if (session()->get('groupLessonCreated'))
    <div class="tab-pane fade show active" id="tab-2">
    @else
        <div class="tab-pane fade" id="tab-2">
@endif
<div class="box">
    <div class="tab-title flex">
        <div>
            <h2>Group Lessons</h2>
            <h3>All Group Lessons</h3>
        </div>

    </div>
    <div class="table-responsive">
        <table class="table quiz-table DataTable" class="display">
            <thead>
                <tr>
                    <th>
                        <span class="table-title">Title <i class="fa-solid fa-sort"></i></span>

                    </th>
                    <th>
                        <span class="table-title">Class / Grade <i class="fa-solid fa-sort"></i></span>

                    </th>
                    <th>
                        <span class="table-title">Course <i class="fa-solid fa-sort"></i></span>

                    </th>


                    <th data-sortable="false">
                        <span class="table-title">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody id="allQuizes">

                @foreach ($groupLessons as $groupLesson)
                    <tr valign='middle'>
                        <td>{{ $groupLesson['title'] }}</td>
                        @foreach ($teaches_levels as $teach_level)
                            @if ($groupLesson['teach_level_id'] == $teach_level->id)
                                <td>{{ $teach_level->teaches_level }}</td>
                            @endif
                        @endforeach
                        @foreach ($subjects as $subject)
                            @if ($groupLesson['subject_id'] == $subject->id)
                                <td>{{ $subject->subject }}</td>
                            @endif
                        @endforeach

                        <td>
                            <a href="{{ route('show.groupLesson', $groupLesson['id']) }}"
                                class="border-0 bg-transparent"><i class="fa-solid fa-eye fs-4 text-primary"></i></a>
                            <a href="{{ route('edit.groupLesson', $groupLesson['id']) }}"
                                class="border-0 bg-transparent"><i
                                    class="fa-solid fa-pen-to-square fs-4  mx-3 text-primary"></i></a>
                            <a href="{{ route('delete.groupLesson', $groupLesson['id']) }}"
                                class="border-0 bg-transparent"><i class="fa-solid fa-trash fs-4 text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
