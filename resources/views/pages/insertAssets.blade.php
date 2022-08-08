@extends('include/base')

@section('content')
      <div class="flex bg-black h-screen place-content-center  place-items-center">
        <div class="w-1/4 mx-auto">
            <div class="bg-white px-4 py-4 rounded">
                <h1 class="font-sans py-4  font-semibold">Insert Assets </h1>
                <form action="{{route('assets.store')}}" method="POST">
                    @csrf
                <div class="flex flex-col  my-3">
                <label for="">Asset name</label>
                <input type="text" name="assets_name" placeholder="Enter email here" class="shadow-sm flex-1 border-2 p-2 outline-none focus:border-green-500">
            </div>
            <div class="flex flex-col my-3">
                <label for="">Asset code</label>
                <input type="assets_code" name="password" placeholder="Enter password here" class="shadow-sm flex-1 border-2 p-2 outline-none focus:border-green-500">
            </div>
            <div class="flex flex-col my-3">
                <label for="">Asset image</label>
                <input type="assets_image" name="password" placeholder="Enter password here" class="shadow-sm flex-1 border-2 p-2 outline-none focus:border-green-500">
            </div>
           
            <div class="flex">
                <input type="submit" class="bg-green-700 px-5 py-4 flex-1 text-white rounded-md hover:bg-green-800" value="Insert Assets Here">
            </div>
        </form>
    </div>
      </div>
    </div>
@endsection