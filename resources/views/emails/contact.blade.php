<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak Baru</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #1f2937; background: #f8fafc; margin: 0; padding: 32px 16px;">
    <div style="max-width: 640px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
        <h2 style="margin: 0 0 16px; color: #0f172a;">Pesan Kontak Baru</h2>

        <p style="margin: 0 0 12px;"><strong>Nama:</strong> {{ $contact['name'] }}</p>
        <p style="margin: 0 0 12px;"><strong>Email:</strong> {{ $contact['email'] }}</p>

        <div style="margin-top: 20px; padding: 16px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0;">
            <strong>Pesan:</strong>
            <p style="margin: 8px 0 0; white-space: pre-line;">{{ $contact['message'] }}</p>
        </div>
    </div>
</body>
</html>
