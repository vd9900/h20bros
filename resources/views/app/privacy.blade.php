@extends('layouts.index')

@section('title')
    Privacy Policy | {{env('APP_NAME')}}
@endsection

@section('meta')
@endsection

@section('css')
    <style type="text/css">
        h3 {
            font-size: 32px;
            line-height: 40px;
            font-weight: 900;
        }

        p {
            font-size: 20px !important;
        }
    </style>
@endsection

@section('content')
    <!-- privacy and policy  section -->
    <section>
        <div class="container py-5">
            <div class="text-lightgray">
                <div class="py-3">
                    <h3 class="text-green-1 text-center" style='font-family: "latobold" !important;'>Privacy Policy</h3>
                </div>
                <p>MetroMaids House Cleaning, LLC Privacy Policy</p>
                <br>
                <p>MetroMaids House Cleaning, LLC (“MetroMaids,” “we,” “our,” “us”) respects your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our services.</p>
                <br>
                <h1>Information We Collect</h1>
                <p>We may collect personally identifiable information, such as your name, phone number, and address. This information is used to fulfill or meet the reason you provided the information.</p>

                <h1>Use of Your Information</h1>
                <p>We use your information to provide and improve our services, communicate with you, understand usage trends and preferences, to personalize your experience, and to comply with legal obligations.</p>

                <h1>Disclosure of Your Information</h1>
                <p>We may share information we have collected about you in certain situations. For example, we may provide your information to service providers and contractors who perform services on our behalf. We do not sell, rent, or lease customer lists to third parties.</p>

                <h1>Security of Your Information</h1>
                <p>We use administrative, technical, and physical security measures to protect your personal information. While we have taken reasonable steps to secure the information you provide to us, please be aware that no security measures are perfect or impenetrable.</p>

                <h1>Policy for Children</h1>
                <p>We do not knowingly solicit information from or market to children under the age of 13.</p>

                <h1>Contact Us</h1>
                <p>If you have questions or concerns about this Privacy Policy, please contact us at:</p>
                <p>MetroMaids House Cleaning, LLC<br>
                73 Sheridan Ave, 1st floor<br>
                Brooklyn, NY 11208<br>
                Phone: 19179053058</p>

                <h1>Changes to This Privacy Policy</h1>
                <p>We reserve the right to make changes to this Privacy Policy at any time and for any reason. Any changes or modifications will be effective immediately upon posting the updated Privacy Policy on our website, and you waive the right to receive specific notice of each such change or modification.</p>

                <h1>Consent</h1>
                <p>By using our services, you are consenting to our Privacy Policy. If you do not agree with this policy, please do not use our services. Your continued use of the Services following the posting of changes to this policy will be deemed your acceptance of those changes.</p>

                <h1>Access to Your Information</h1>
                <p>If you would like to review, edit, or delete any of the personal information we have retained about you, please contact us using the information in the Contact Us section of this policy.</p>

                <h1>Data Retention</h1>
                <p>We will only keep your personal data for as long as necessary to fulfill the purposes we collected it for, including for the purposes of satisfying any legal, accounting, or reporting requirements.</p>

                <h1>Third-Party Websites</h1>
                <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or the content of third-party sites. Please read the privacy policy of any website you visit.</p>

                <h1>Use of Cookies</h1>
                <p>We may use cookies and similar tracking technologies to personalize your experience on our site, analyze trends, and gather demographic information about our user base as a whole.</p>

                <h1>Data Protection Rights under GDPR</h1>
                <p>If you are a resident of the European Economic Area (EEA), you have certain data protection rights. MetroMaids aims to take reasonable steps to allow you to correct, amend, delete, or limit the use of your personal data. If you wish to be informed about what personal data we hold about you and if you want it to be removed from our systems, please contact us.</p>

                <h1>California Privacy Rights</h1>
                <p>If you are a California resident, you have the right to request information regarding the disclosure of your personal information by MetroMaids to third parties for the third parties' direct marketing purposes.</p>

                <p>This Privacy Policy was last updated on May 28, 2023.</p>
            </div>
        </div>
    </section>
@endsection
