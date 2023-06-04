@extends('pages.admin.layouts._master')


@section('title','Attestation')


@section('content')
<div class="attestation container-sm">
    <div class="attestation-current">
        <h1>Votre Attestations:</h1>

        <div class="attestation-current_list">
            <div class="certificat default">
                <h2>Aucune Attestation Obtenu</h1>
                    <button>Go to courses</button>
            </div>

            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Date of issue:
                    <span>22-Mars-2023</span>
                </p>
                <button>Download</button>
            </div>
            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Date of issue:
                    <span>22-Mars-2023</span>
                </p>
                <button>Download</button>
            </div>
            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Date of issue:
                    <span>22-Mars-2023</span>
                </p>
                <button>Download</button>
            </div>
            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Date of issue:
                    <span>22-Mars-2023</span>
                </p>
                <button>Download</button>
            </div>
        </div>
    </div>

    <div class="attestation-coming">
        <h1>Porchaine Attestations:</h1>

        <div class="attestation-coming_list">
            <div class="certificat default">
                <h2>Aucune Attestation Obtenu</h1>
                    <button>Go to courses</button>
            </div>

            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Projected Date of issue: </br>
                    22-Mars-2023
                </p>
            </div>
            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Projected Date of issue: </br>
                    22-Mars-2023
                </p>
            </div>
            <div class="certificat">
                <h2>Atay bard</h2>
                <p>
                    Projected Date of issue: </br>
                    22-Mars-2023
                </p>
            </div>
        </div>
    </div>
</div>
@endsection