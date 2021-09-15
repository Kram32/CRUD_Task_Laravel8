<div class="form-group">
    @if ($errors->any())

        <p>
            <ul>
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        
                            <li>{{ $error }}</li>
                        
                    @endforeach
                </div>
            </ul>
        </p>

    @endif


    <div>
        {{-- @error("title")
            <div>{{ $message }}</div>
        @enderror --}}
        <label for="title">Title</label><br>
            {{-- We use optional() for the create form and edit from so that we will not have an error because we only have 1 form --}}
        {{-- but we can separate this form, one for create file and one for edit file --}}
        <input name="title" class="form-control" id="title" type="text" value="{{ old("title", optional($post ?? null)->title) }}">
    </div>


    {{-- @error("content")
        <div>{{ $message }}</div>
    @enderror --}}
    <div>
        <label for="content">Content</label><br>
        {{-- We use optional() for the create form and edit from so that we will not have an error because we only have 1 form --}}
        {{-- but we can separate this form, one for create file and one for edit file --}}
        <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{ old("content", optional($post ?? null)->content) }}</textarea>

    </div>
</div>