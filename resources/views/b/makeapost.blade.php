@extends('b._layout')
@section('css')
    <link href="{{ asset('b/plugins/jodit/jodit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('b/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>{{ $title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="titleHelp">
                                    {{-- <div id="titleHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                </div>
                                <div class="mb-3">
                                    <textarea id="editor"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="js-states form-control" tabindex="-1" name="category" id="category"
                                        style="display: none; width: 100%">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Tags</label>
                                    <select class="js-example-basic-multiple-limit js-states form-control"
                                        multiple="multiple" tabindex="-1" style="display: none; width: 100%">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('b/plugins/jodit/jodit.min.js') }}"></script>
    <script src="{{ asset('b/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection
@section('script')
    <script>
        $('select').select2();
        $(".js-example-basic-multiple-limit").select2({
            maximumSelectionLength: 5,
            tags: true,
            tokenSeparators: [',', ' ']
        });

        const editor = Jodit.make("#editor", {
            "uploader": {
                "insertImageAsBase64URI": true
            },
            //   "theme": "light",
            "toolbarButtonSize": "small",
            "height": 500,
            "minHeight": 500,
            "toolbarAdaptive": false,
            "buttons": [
                "bold",
                "italic",
                "underline",
                "strikethrough",
                "|",
                "eraser",
                "ul",
                "ol",
                "indent",
                "outdent",
                "align",
                "|",
                "font",
                "fontsize",
                "brush",
                "|",
                "paragraph",
                // "classSpan",
                "superscript",
                "subscript",
                "|",
                "image",
                // "video",
                // "file",
                "|",
                // "copyformat",
                // "cut",
                // "copy",
                // "paste",
                // "selectall",
                // "|",
                "hr",
                "table",
                // "link",
                "symbol",
                "|",
                "undo",
                "redo",
                "find",
                "|",
                "source",
                // "fullsize",
                // "preview",
                // "print",
                // "about",
                //   "\n",
            ],
        });
    </script>
@endsection
