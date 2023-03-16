@include('include.header')
@include('include.admin-nave')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="btn btn-primary">All Client</h3>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Client Name</th>
                    <th scope="col">Client Phone</th>
                    <th scope="col">Client Mail</th>
                    <th scope="col">Course</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($forms as $form)
                <tr>
                    <th scope="row">{{$form->name}}</th>
                    <td>{{$form->phone}}</td>
                    <td>{{$form->email}}</td>
                    <td>{{$form->course}}</td>
                    <td><a class="btn btn-danger" href="{{route('destroy-form',['id'=>$form->id])}}">Delete Client</a></td>
                    <td></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
@include('include.footer')
