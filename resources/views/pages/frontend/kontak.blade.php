@extends('layouts.frontend.master2')
<style>
    /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    color: #333;
    line-height: 1.6;
}

/* Breadcrumbs */
.breadcrumbs-section {
    background-color: #f5f5f5;
    padding: 10px 0;
}
.breadcrumbs {
    font-size: 14px;
}
.breadcrumbs a {
    color: #4CAF50;
    text-decoration: none;
}

/* Contact Section */
.contact-section {
    padding: 40px 0;
}
.contact-list, .contact-form {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
}
.contact-list h3, .contact-form h3 {
    color: #4CAF50;
    margin-bottom: 10px;
}
.contact-items {
    margin-top: 20px;
}
.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
.contact-item i {
    font-size: 20px;
    margin-right: 10px;
    color: #4CAF50;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}
.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.contact-form .submit-button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.contact-form .submit-button:hover {
    background-color: #45a049;
}

/* FAQ Section */
.faq-section {
    background-color: #f5f5f5;
    padding: 40px 0;
    text-align: center;
}
.faq-section h2 {
    color: #4CAF50;
}
.accordion {
    max-width: 600px;
    margin: 20px auto;
    text-align: left;
}
.accordion-item {
    border-bottom: 1px solid #ddd;
    padding: 15px 0;
}
.accordion-title {
    cursor: pointer;
    font-weight: bold;
    padding: 10px;
    background-color: #f1f1f1;
    border: none;
    outline: none;
    width: 100%;
    text-align: left;
}

.accordion-content {
    padding: 10px;
    background-color: #fafafa;
    border-top: 1px solid #ddd;
    display: none;
}


/* Responsive */
@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }
    .contact-list, .contact-form {
        margin-bottom: 20px;
    }
}

</style>
@section('content')
    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs-section">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a> &gt;
                <span>Kontak</span>
            </nav>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Contact List -->
                <div class="contact-list col-lg-4">
                    <h3>{{ settings()->get('setting.contact.list.title') }}</h3>
                    <p>{{ settings()->get('setting.contact.list.sub_title') }}</p>
                    <div class="contact-items">
                        @foreach ($contacts as $v)
                            <div class="contact-item">
                                <i class="{{ $v->icon }}"></i>
                                <a href="{!! $v->url !!}">{{ $v->keterangan }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form col-lg-7">
                    <h3>{{ settings()->get('setting.contact.message.title') }}</h3>
                    <p>{{ settings()->get('setting.contact.message.sub_title') }}</p>
                    <form action="#" id="message_form">
                        <div class="form-group">
                            <label>{{ settings()->get('setting.contact.message.name') }}</label>
                            <input type="text" name="nama" placeholder="{{ settings()->get('setting.contact.message.name_placeholder') }}" required>
                        </div>
                        <div class="form-group">
                            <label>{{ settings()->get('setting.contact.message.email') }}</label>
                            <input type="email" name="email" placeholder="{{ settings()->get('setting.contact.message.email_placeholder') }}" required>
                        </div>
                        <div class="form-group">
                            <label>{{ settings()->get('setting.contact.message.message') }}</label>
                            <textarea name="message" placeholder="{{ settings()->get('setting.contact.message.message_placeholder') }}" required></textarea>
                        </div>
                        <button type="submit" class="submit-button">
                            {{ settings()->get('setting.contact.message.button_text') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    @if ($faqs->count())
    <section class="faq-section">
        <div class="container">
            <h2>{{ settings()->get('setting.contact.faq.title') }}</h2>
            <p>{{ settings()->get('setting.contact.faq.sub_title') }}</p>
            <div class="accordion">
                @foreach ($faqs as $v)
                    <div class="accordion-item">
                        <button class="accordion-title">{{ $v->nama }}</button>
                        <div class="accordion-content" style="display: none;">
                            <p>{{ $v->jawaban }}</p>
                        </div>
                    </div>
                    @if ($v->type == 2)
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif

@endsection


@section('javascript')
    <script>
        $(document).ready(function() {
            // Toggle display for each accordion item on title click
            $('.accordion-title').on('click', function() {
                const $content = $(this).next('.accordion-content');
                
                // Hide all other accordion contents
                $('.accordion-content').not($content).slideUp();
                
                // Toggle the current content
                $content.slideToggle();
            });
        });
    </script>
@endsection

@section('javascript')
    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Handle form submission with AJAX
            $('#message_form').submit(function(e) {
                const form = this;
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit]', `Sending...`);
                
                $.ajax({
                    type: "POST",
                    url: "{{ route('kontak.send') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Message sent successfully',
                            showConfirmButton: true,
                            timer: 4500
                        });
                        $(form).trigger("reset");
                    },
                    error: function(data) {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit]', `{{ settings()->get('setting.contact.message.button_text') }}`, false);
                    }
                });
            });

            // Accordion functionality for FAQ section
            $('.accordion__button').on('click', function() {
                var $content = $(this).next('.accordion__content');
                var $icon = $(this).find('.icon');

                // Close all other accordions
                $('.accordion__content').not($content).slideUp();
                $('.accordion__button').not(this).find('.icon[data-feather="minus"]').attr('data-feather', 'plus');
                
                // Toggle current accordion
                $content.slideToggle();
                if ($icon.attr('data-feather') === 'plus') {
                    $icon.attr('data-feather', 'minus');
                } else {
                    $icon.attr('data-feather', 'plus');
                }
                
                feather.replace(); // Refresh feather icons
            });
        });

        function setBtnLoading(element, text, status = true) {
            const el = $(element);
            if (status) {
                el.attr("disabled", "");
                el.html(
                    `<span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> <span>${text}</span>`
                );
            } else {
                el.removeAttr("disabled");
                el.html(text);
            }
        }
    </script>
@endsection

