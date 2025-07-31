<div class="tutor-wrap tutor-page-wrap courses type-courses">
    <div class="tutor-template-segment tutor-login-wrap">

        <div class="tutor-login-form-wrapper">
            <div class="tutor-fs-5 tutor-color-black tutor-mb-32">
                Hi, Welcome back! </div>
            <form id="tutor-login-form" method="post">
                <?php wp_nonce_field('tutor_nonce_action', '_tutor_nonce'); ?>
                <input type="hidden" name="tutor_action" value="tutor_user_login">
                <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url('/')); ?>">

                <div class="tutor-mb-20">
                    <input type="text" class="tutor-form-control" placeholder="Username or Email Address" name="log"
                        value="" size="20" required="">
                </div>

                <div class="tutor-mb-32">
                    <input type="password" class="tutor-form-control" placeholder="Password" name="pwd" value=""
                        size="20" required="">
                </div>

                <div class="tutor-login-error"></div>
                <input type="hidden" name="timezone" value="">
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const timezone = document.querySelector('input[name="timezone"]');
                        if (timezone) {
                            const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;
                            timezone.value = tz
                        }
                    });
                </script>
                <div class="tutor-d-flex tutor-justify-between tutor-align-center tutor-mb-40">
                    <div class="tutor-form-check">
                        <input id="tutor-login-agmnt-1" type="checkbox" class="tutor-form-check-input tutor-bg-black-40"
                            name="rememberme" value="forever">
                        <label for="tutor-login-agmnt-1" class="tutor-fs-7 tutor-color-muted">
                            Keep me signed in </label>
                    </div>
                    <a href="<?php echo esc_url(home_url('/dashboard/retrieve-password/')); ?>"
                        class="tutor-btn tutor-btn-ghost">
                        Forgot Password? </a>
                </div>

                <button type="submit" class="tutor-btn tutor-btn-primary tutor-btn-block">
                    Sign In </button>

                <div class="tutor-text-center tutor-fs-6 tutor-color-secondary tutor-mt-20">
                    Don't have an account?&nbsp;
                    <?php
                    // Get the registration page URL - check for Student Registration page first
                    $registration_page_id = get_page_by_title('Student Registration');
                    if ($registration_page_id) {
                        $registration_url = get_permalink($registration_page_id->ID);
                    } else {
                        // Fallback to Tutor dashboard registration
                        $registration_url = tutor_utils()->get_tutor_dashboard_url() . 'create-account';
                    }
                    ?>
                    <a href="<?php echo esc_url($registration_url); ?>" class="tutor-btn tutor-btn-link">
                        Register Now </a>
                </div>
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var { __ } = wp.i18n;
                    var loginModal = document.querySelector('.tutor-modal.tutor-login-modal');
                    var errors = [];
                    if (loginModal && errors.length) {
                        loginModal.classList.add('tutor-is-active');
                    }
                });
            </script>
        </div>
    </div>
</div>