@extends('master.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endsection

@section('content')
        <!-- <div class="container"> -->
            <section class="get-in-touch-one" style="margin-top: -200px;">
                <div class="contact-page__bottom">                    
                    <div class="contact-page__bottom-form">
                        <div class="container">
                            <div class="contact-page__bottom-form-inner">
                                <div class="title-box">
                                    <h2>Form Profile</h2>
                                </div>
                                <div class="contact-page__bottom-form-inner-box">
                                    <form action="{{ route('profil.update', $profile->id )}}" method="POST"
                                        class="contact-page__form contact-form-validated">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <input type="text" placeholder="Judul" name="judul" value="{{ $profile->judul }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <textarea type="text" placeholder="Content" name="content">{{ $profile->content }}</textarea>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="contact-page__input-box">
                                                    <!-- Quill editor will be initialized here -->
                                                    <div id="quill-editor">{!! $profile->content !!}</div>
                                                    <!-- Hidden input to store the content of the Quill editor -->
                                                    <input type="hidden" name="content" id="quill-content">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <button class="btn btn-block btn-danger" type="button" onclick="window.history.back();">
                                                    <span class="txt">Batal</span>
                                                </button>
                                                <button class="btn btn-block btn-primary" type="submit">
                                                    <span class="txt">
                                                        Simpan
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#quill-editor', {
                theme: 'snow',
                placeholder: 'Write your content here...',
                modules: {
                    toolbar: [
                        // [{ 'header': [1, 2, 3, false] }],
                        ['bold', 'italic', 'underline'],
                        ['link', 'image', 'video'],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }]
                    ]
                }
            });

            // Update hidden input on content change
            var quillContent = document.querySelector('#quill-content');
            quill.on('text-change', function() {
                quillContent.value = quill.root.innerHTML;
            });

            // Set initial value
            quillContent.value = quill.root.innerHTML;
        });
    </script>
@endsection
