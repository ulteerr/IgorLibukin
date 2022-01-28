<h2>Write me :</h2>
<form method="post" action="{{route('contacts.send')}}" id="feedbackForm">
    @csrf
    <div class="form-group">
        <label for="cname"></label>
        <input type="text" class="form-control required" id="name" name="name" placeholder="Name, surname"
               value="{{ old('name') ?? '' }}">
    </div>
    <div class="form-group">
        <input type="email" class="form-control required" id="email" name="email" placeholder="Email"
               value="{{ old('email') ?? '' }}">
    </div>
    <div class="form-group">
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
               value="{{ old('phone') ?? '' }}">
    </div>
    <div id="dnd">
        <label for="upload">
            <div class="dnd_block">
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
        <div class="text">Download files in .rar or .zip format, maximum file size 10 MB</div>
    </div>
    <div class="avatar row mb-3">
        <p class="label">You send a file:</p>
        <div class="images-list"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control required" id="message" name="message" placeholder="Message"
                  rows="3">{{ old('message') ?? '' }}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" id="form_send" class="btn form_button">Send</button>
    </div>
    <div class="success">Message sent successfully</div>
    <div class="loader">Loading...</div>
</form>
