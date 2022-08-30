<div class="m-5">
    <h2>{{$title}}</h2>
    <form {{$attributes}} class="row mt-5" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-4">
            <div class="my-4">
                <label class="form-label fs-6" for="multicol-username">Your Name:</label>
                <input name="name" value="{{$val1}}" type="text" id="multicol-username" class="form-control" />
                @error('name')
                    <span class="text-end text-danger">* {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fs-6" for="multicol-username">Your Address:</label>
                <input name="address" value="{{$val2}}" type="text" id="multicol-username" class="form-control" />
                @error('address')
                    <span class="text-end text-danger">* {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fs-6" for="multicol-username">Your Job Name:</label>
                <input name="job" value="{{$val3}}" type="text" id="multicol-username" class="form-control" />
                @error('job')
                    <span class="text-end text-danger">* {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fs-6" for="multicol-username">Your Phone:</label>
                <input name="phone" value="{{$val4}}" type="text" id="multicol-username" class="form-control" />
                @error('phone')
                    <span class="text-end text-danger">* {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fs-6" for="multicol-username">Your Image:</label>
                <input name="image" type="file" id="multicol-username"
                    oninput="{{$imageName}}.src=window.URL.createObjectURL(this.files[0])" class="form-control" />
                @error('image')
                    <span class="text-end text-danger">* {{ $message }} </span>
                @enderror
            </div>
        </div>
        <div class=" col-4 m-4 h-75 profile">
            <h6 class="">Preview Image</h6>
            <div class="bg-muted " style="width:400px;height:330px">
                <img alt="" id="{{$imageId}}" class=" mx-auto w-100 h-100 bg-muted">
            </div>
        </div>
        <div class="pt-4 col-4">
            <button type="submit" class="btn text-white w-100"
                style="background-color: rgb(5 44 101) !important;">Save Information</button>
        </div>
    </form>
</div>
