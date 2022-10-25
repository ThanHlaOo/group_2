@extends('admin.layouts.app')
@section('content')
   
    <div class="clearfix">
        <a href="" class="btn btn-back"><i class="fa-solid fa-arrow-left"></i><span>Back</span></a>
        <a href="" class="btn btn-add"><i class="fa-solid fa-plus"></i><span>Add</span></a>
    </div>
    <h2 class="form-ttl">Courses</h2>
    <table>
        <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Than Hla Oo</td>
                <td>11/2/2022</td>
                <td class="action">
                    <a href="" class="btn btn-edit">Edit</a>
                    <a href="" class="btn btn-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Than Hla Oo</td>
                <td>11/2/2022</td>
                <td class="action">
                    <a href="" class="btn btn-edit">Edit</a>
                    <a href="" class="btn btn-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Than Hla Oo</td>
                <td>11/2/2022</td>
                <td class="action">
                    <a href="" class="btn btn-edit">Edit</a>
                    <a href="" class="btn btn-delete">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection