@extends('layouts.vertical', ['subtitle' => 'Pakar AI'])

@section('content')
@include('layouts.partials/page-title', ['title' => 'Tables', 'subtitle' => 'Pakar AI'])

<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-body">
            <h4 class="card-title">Tanya ke Pakar AI</h4>
            <form id="ask-form">
                @csrf
                <div class="mb-3">
                    <label for="question" class="form-label">Pertanyaan Anda</label>
                    <textarea class="form-control" id="question" name="question" rows="3" required placeholder="Tulis pertanyaan di sini..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>

    <div class="mt-4" id="response-container" style="display: none;">
        <div class="card border-success">
            <div class="card-body">
                <h5 class="card-title">Jawaban dari AI</h5>
                <p id="ai-response" class="card-text text-success"></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.getElementById('ask-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    const question = document.getElementById('question').value;
    const csrfToken = document.querySelector('input[name="_token"]').value;

    const responseContainer = document.getElementById('response-container');
    const responseText = document.getElementById('ai-response');
    responseText.textContent = "Sedang memproses...";
    responseContainer.style.display = 'block';

    try {
        const res = await fetch("{{ route ('third' , ['gps_tracker','pakar_ai','index']) }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ question })
        });

        const data = await res.json();
        responseText.textContent = data.answer || "Tidak ada jawaban dari AI.";
    } catch (err) {
        responseText.textContent = "Terjadi kesalahan saat menghubungi AI.";
    }
});
</script>

@endsection