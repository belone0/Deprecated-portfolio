<div id="contact" class="project-div px-3 row justify-content-center mx-1">
    <div class="stack-div px-3 py-3 justify-content-center row px-5">
        <div class="row justify-content-center">
            <h1 class="col-12 fit mt-2">Send me a message!</h1>
        </div>
        <p class="fs-4 mt-2 mb-5 d-flex justify-content-center">Got a question, proposal or just want to say hello? Go
            ahead!
        </p>
        <form class="needs-validation" novalidate>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 mb-4">
                    <div class="form-group">
                        <input id="validationCustom01" name="name" class="form-control  name_and_email InputStyle"
                               placeholder="Tell me your name!"
                               type="text" required>
                        <div class="invalid-feedback">
                            You forgot to write your name!
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <input id="validationCustom02" class="form-control name_and_email InputStyle" placeholder="What's your email, so I can respond to you?
                         " type="text" required>
                        <div class="invalid-feedback">
                            I need to know your email as well!
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                        <textarea id="validationCustom03" class="form-control message InputStyle"
                                  placeholder="Write your message here!"
                                  type="text" required></textarea>
                    <div class="invalid-feedback">
                        I think you forgot to write your mesage!
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <button type="submit" class="btn fit btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@push('js')
    <script src="scripts/contact.js"></script>
@endpush

