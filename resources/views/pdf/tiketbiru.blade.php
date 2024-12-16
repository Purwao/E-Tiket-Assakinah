<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Tiket Biru</title>
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 109.07 122.88'><path fill='white' d='M96.5,69.62V4.47h-92v97.45l8.12,4.32,11.74-9.91,14.74,9.86,8.75-10.06,9.52,6.8A16.17,16.17,0,0,0,56,105.38,14.07,14.07,0,0,0,55.4,107l-6.87-4.91-8.67,10L24.64,101.9l-11.48,9.69L0,104.58V0H101V69.83a16,16,0,0,0-2.68-.28,15.39,15.39,0,0,0-1.79.07Zm-6.23,8a11.16,11.16,0,0,1,15.72.32h0a11.16,11.16,0,0,1-.32,15.72c-9.12,8.75-18.19,17.41-27.31,26.16h0a11.08,11.08,0,0,1-15.64-.32h0A11.1,11.1,0,0,1,63,103.84h0c9.12-8.76,18.1-17.46,27.23-26.23Zm-2,29.22L76.59,94.68l-11.42,11h0a8.45,8.45,0,0,0-.25,11.91h0a8.45,8.45,0,0,0,11.92.24h0l11.42-11Zm-2-93.21a2.23,2.23,0,1,1,0,4.46h-9a2.23,2.23,0,1,1,0-4.46ZM58.77,79.45a2.23,2.23,0,1,1,0,4.46H14.15a2.23,2.23,0,1,1,0-4.46ZM14.15,39V15.2H26.39a17.73,17.73,0,0,1,5.2.59A5.57,5.57,0,0,1,34.49,18a6.59,6.59,0,0,1,1.1,3.87,6.66,6.66,0,0,1-.84,3.41,6.29,6.29,0,0,1-4.6,3.17l4.74,7.87L39,29h8L39.59,40.47l8.09,12.26H39.41l-4.66-7.64-4.7,7.64h-8.2L30,40.34c-1-1.63-5.18-9.82-6.07-10.45a3.09,3.09,0,0,0-1.81-.54h-.64V39Zm7.37-14.11h3.1a11.79,11.79,0,0,0,1.95-.32,2,2,0,0,0,1.19-.75,2.42,2.42,0,0,0-.27-3.15A4.36,4.36,0,0,0,24.75,20H21.52v4.84Zm64.7,9.64a2.24,2.24,0,0,1,0,4.47H64.15a2.24,2.24,0,1,1,0-4.47Zm0,30a2.24,2.24,0,0,1,0,4.47H14.15a2.24,2.24,0,1,1,0-4.47Zm0-15a2.24,2.24,0,0,1,0,4.47H57.62a2.24,2.24,0,1,1,0-4.47Z'/></svg>">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;

        }

        .flex-row {
            width: 100%;
            text-align: left;
        }

        .page-break {
            page-break-after: always;
        }

        .form-container {
            display: inline-block;
            width: 250px;
            height: 150px;
            margin: 0;
            vertical-align: top;
            padding: 20px;
            border: 1px solid #ddd;
            /* border-radius: 8px; */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            margin-right: 40px;
        }

        .header {
            text-align: center;
            /* margin-bottom: 10px; */
        }

        .header img {
            width: 170px;
        }

        /* .header h5 {
            font-size: 15px;
            margin: 0;
        }
        .header p {
            font-size: 7px;
            margin: 5px 0;
        } */

        .form-group {
            display: flex;
            justify-content: space-between;
        }

        .form-group label {
            font-weight: bold;
            font-size: 10px;
        }

        .form-group span {
            flex-grow: 1;
            font-size: 10px;
            margin-left: 5px;
        }

        /* .instructions {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
        } */

        .instructions label {
            font-weight: bold;
            font-size: 10px;
        }


        .instructions span {
            flex-grow: 1;
            font-size: 10px;
            margin-left: 5px;
        }

        /* Footer styling */
        .footer {
            margin-top: 15px;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="flex-row">
        @foreach ($data as $index => $item)
            <div class="form-container">
                <div class="header">
                    {{-- <h5>INSTALASI FARMASI</h5>
                    <p>RSU ASSAKINAH MEDIKA</p>
                    <p>JL. BOGEM KEBONAGUNG NO. 65, SUKODONO - SIDOARJO</p>
                    <p>TELP. (031) 8832354</p> --}}
                    <img src="{{ public_path('img/logo_assakinah.png') }}" alt="Logo Assakinah">
                </div>
                <div class="form-group">
                    <label for="number">NO :</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="name">NAMA :</label>
                    <span>{{ $item['nama'] }}</span>
                    <label for="date" style="margin-left: 10px;">TGL :</label>
                    <span>{{ $item['date'] }}</span>
                </div>
                <div class="form-group">
                    <label for="medicine">OBAT :</label>
                    <span>{{ $item['medicine'] }}</span>
                    <label for="expiry" style="margin-left: 10px;">EXP Date:</label>
                    <span>{{ $item['expdate'] }}</span>
                </div>
                <div class="instructions">
                    <label for="daily-dosage">DOSIS :</label>
                    <span>{{ $item['dailydosage'] }} {{ $item['medicineform'] }}</span>
                </div>
                <div class="instructions">
                    <label for="detail">PETUNJUK KHUSUS :</label>
                    <span>{{ $item['detail'] }}</span>
                </div>
                <div class="footer">
                    <span>OBAT LUAR</span>
                </div>
            </div>
            @if (($index + 1) % 8 == 0)
                <div class="page-break"></div>
            @endif
        @endforeach
    </div>

</body>

</html>
