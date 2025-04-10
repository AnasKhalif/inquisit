<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban Peserta - {{ $category->kategori }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f3f4f6;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Jawaban Peserta untuk Kategori: {{ $category->kategori }}</h2>
    <table>
        <thead>
            <tr>
                <th>Nama </th>
                <th>Pertanyaan</th>
                @if ($category->kategori == 'Mental Stress')
                    <th>Level</th>
                    <th>Phase</th>
                @endif
                @if ($category->kategori !== 'Digit Span' && $category->kategori !== 'Mental Stress')
                    <th>Kategori Soal</th>
                @endif
                @if (
                    $category->kategori !== 'Color Word' &&
                        $category->kategori !== 'Aritmatika' &&
                        $category->kategori !== 'Mental Stress')
                    <th>Tipe Soal</th>
                @endif
                <th>Jawaban</th>
                <th>Waktu (detik)</th>
                <th>Benar/Salah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answers as $answer)
                <tr>
                    <td>{{ $participant->name }}</td>
                    <td>
                        {{ $category->kategori === 'Color Word' && empty($answer->question->pertanyaan) ? 'BLOCK' : $answer->question->pertanyaan }}
                    </td>
                    @if ($category->kategori == 'Mental Stress')
                        <td>{{ $answer->question->level }}</td>
                        <td>{{ $answer->question->phase }}</td>
                    @endif
                    @if ($category->kategori !== 'Digit Span' && $category->kategori !== 'Mental Stress')
                        <td>{{ $answer->question->kategori_soal }}</td>
                    @endif
                    @if (
                        $category->kategori !== 'Color Word' &&
                            $category->kategori !== 'Aritmatika' &&
                            $category->kategori !== 'Mental Stress')
                        <td>{{ $answer->question->type }}</td>
                    @endif
                    <td>{{ $answer->jawaban }}</td>
                    <td>
                        @if (isset($answer->timeDifference))
                            {{ $answer->timeDifference < 0 ? 0 : $answer->timeDifference }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $answer->benar_salah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
