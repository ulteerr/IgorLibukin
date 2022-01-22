<h2>Write me :</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('feedback.send')}}" id="feedbackForm">
    @csrf
    <div class="form-group">
        <label for="cname"></label>
        <input type="text" class="form-control required" name="name" placeholder="Name, surname"
                value="{{ old('name') ?? '' }}">
    </div>
    <div class="form-group">
        <input type="email" class="form-control required" name="email" placeholder="Email"
                value="{{ old('email') ?? '' }}">
    </div>
    <div class="form-group">
        <input type="tel" class="form-control" name="tel" placeholder="Phone"
                value="{{ old('phone') ?? '' }}">
    </div>
    <label for="upload">
        <div class="d-flex dnd_block mb-2">
            @csrf
            <input type="file" id="upload" class="form-control-file">
            <div class="drag-and-drop" id="file">
                <h3 class="drag-and-drop-title text-center">
                    Drag and drop one file to upload or click
                </h3>
                <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            </div>
        </div>
    </label>
    <div class="avatar row mb-3">
        <label class="col-md-4 col-form-label text-md-end">Ваша новая фотография:</label>
        <div class="images-list"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control required" name="message" placeholder="Message"
                   rows="3">{{ old('message') ?? '' }}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn form_button">Send</button>
    </div>
</form>
