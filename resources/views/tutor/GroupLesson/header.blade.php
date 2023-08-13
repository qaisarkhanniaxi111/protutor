<ul class="nav tab-nav">

    <span class="active" data-bs-toggle="tab" data-bs-target="#tab-1"></span>

    <li class="nav-item active">
        <a href="{{ route('index.groupLesson') }}" style="text-decoration: none">
            <button data-bs-toggle="tab" data-bs-target="#tab-2" class="{{ request()->is('tutorgrouplessons') ? 'active': '' }}">
                <span><i class="fa-solid fa-square-poll-horizontal"></i></span> Group Lessons <small
                id="totalQuizzes"></small>

            </button>
        </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('create.groupLesson') }}">
        <button id="createQuiz" data-bs-toggle="tab" data-bs-target="#tab-3" class="{{ request()->is('tutorgrouplessons/create') ? 'active': '' }}">
            <span><i class="fa-solid fa-plus"></i></span> Create Group
        </button>
      </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('complete.groupLesson') }}">
            <button data-bs-toggle="tab" data-bs-target="#tab-7" class="{{ request()->is('tutorgrouplessons/completed') ? 'active': '' }}">
                <span><i class="fa-solid fa-check-double"></i></span> Completed <small
                    id="expiredQuizes"></small>
            </button>
        </a>
    </li>
</ul>
