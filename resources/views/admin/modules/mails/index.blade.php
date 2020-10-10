@extends('admin.modules.mails.layout.layout')
@section('title', "sendMail")
@section('mail-content')
    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>
    </div>

    @include('admin.modules.mails.layout.common.header')

    <div class="admi-mail-list mb-30">
        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-2">
                        <label for="checkbox-2" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/1.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Jhon Monino</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">11:30am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-3">
                        <label for="checkbox-3" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/2.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Hara Bose</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">10:30am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-4">
                        <label for="checkbox-4" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/3.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Lina Monino</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">10:00am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-5">
                        <label for="checkbox-5" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/4.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Jhon Hira</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">09:01am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-6">
                        <label for="checkbox-6" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/5.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Lava Sona</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">09:30am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-7">
                        <label for="checkbox-7" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/6.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Jhon Monino</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">09:15am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-8">
                        <label for="checkbox-8" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/7.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Jhon Midla</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">09:01am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-9">
                        <label for="checkbox-9" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/1.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Kira Nona</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">08:30am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-10">
                        <label for="checkbox-10" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/2.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Jhon Mathews</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">08:15am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-11">
                        <label for="checkbox-11" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/4.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Jhon Monino</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">07:53am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-13">
                        <label for="checkbox-13" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/5.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Fidra Asole</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">09:01am</div>
        </div>

        <!-- Single Mail -->
        <div class="admi-mail-item">
            <!-- Admi-mail-checkbox -->
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-12">
                        <label for="checkbox-12" class="cr"></label>
                    </div>
                </div>
            </div>
            <!-- Admi-mail-star -->

            <a href="mail-view.html">
                <!-- Admi-mail-body -->
                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="mail-thumb flex-40-thubm mr-3">
                        <img class="border-radius-50" src="img/member-img/4.png" alt="">
                    </div>
                    <div class="div">
                        <div class="admi-mail-from">Fira Hadan</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">08:30am</div>
        </div>
    </div>

@endsection
