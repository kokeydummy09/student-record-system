@extends('layouts.adminLayout')

@section('content')
    <a href={{ route('admin.students.create') }} class="btn btn-primary btn-sm mb-4">New Student</a>

    <div class="bg-base-100 rounded-lg shadow-sm p-4">
        <table class="table table-zebra w-full">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->year_level }}</td>
                        <td class="text-right">
                            <div class="dropdown dropdown-end">
                                <label tabindex="0" class="btn btn-ghost btn-sm rounded-full" aria-haspopup="true"
                                    aria-expanded="false" aria-label="Open actions">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 12h.01M12 12h.01M18 12h.01" />
                                    </svg>
                                </label>
                                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-40">
                                    <li>
                                        <a href="" class="flex items-center gap-2">View</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.students.edit', $student) }}"
                                            class="flex items-center gap-2">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="js-delete-student"
                                            data-student-id="{{ $student->id }}">Delete</a>
                                        <form id="delete-student-{{ $student->id }}"
                                            action="{{ route('admin.students.destroy', $student) }}" method="POST"
                                            style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Pagination links -->
        <div class="p-4">
            {{ $students->links() }}
        </div>
    </div>
    <script src="{{ asset('js/admin-students.js') }}"></script>
@endsection
