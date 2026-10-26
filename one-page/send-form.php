<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Metoda není povolena.']);
    exit;
}

// Honeypot – skryté pole, které vyplňují jen roboti
if (!empty($_POST['website'])) {
    echo json_encode(['success' => true, 'message' => 'Zpráva byla úspěšně odeslána.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Vyplňte prosím všechna pole.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Zadejte prosím platnou e-mailovou adresu.']);
    exit;
}

// Ochrana proti header injection v odesílatelových údajích
$name = str_replace(["\r", "\n"], '', $name);
$email = str_replace(["\r", "\n"], '', $email);

$to = 'karaskovabarbora@seznam.cz';
$subject = '=?UTF-8?B?' . base64_encode('Zpráva z webu od ' . $name) . '?=';

$body = "Jméno: {$name}\n";
$body .= "Email: {$email}\n\n";
$body .= "Zpráva:\n{$message}\n";

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Web Barbora Karásková <noreply@barborakaraskova.cz>',
    'Reply-To: ' . $name . ' <' . $email . '>',
];

$sent = @mail($to, $subject, $body, implode("\r\n", $headers));

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Zpráva byla úspěšně odeslána, ozveme se vám co nejdříve.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Odeslání se nezdařilo, zkuste to prosím později nebo napište na karaskovabarbora@seznam.cz.']);
}
