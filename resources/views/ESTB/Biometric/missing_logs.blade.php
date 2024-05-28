<table>
    <thead>
        <tr>
            <th>Staff ID</th>
            <th>Employee Code</th>
            <th>Full Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($staffData as $staff)
            <tr>
                <td>{{ $staff->id }}</td>
                <td>{{ $staff->EmployeeCode }}</td>
                <td>{{ $staff->full_name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>