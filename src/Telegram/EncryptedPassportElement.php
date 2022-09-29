<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement extends Type
{
    /** Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”. */
    public string $type;

    /** Base64-encoded element hash for using in PassportElementErrorUnspecified */
    public string $hash;

    /** Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?string $data = null;

    /** Optional. User's verified phone number, available only for “phone_number” type */
    public ?string $phone_number = null;

    /** Optional. User's verified email address, available only for “email” type */
    public ?string $email = null;

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @var PassportFile[]
     */
    public ?array $files = null;

    /** Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?PassportFile $front_side = null;

    /** Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?PassportFile $reverse_side = null;

    /** Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials. */
    public ?PassportFile $selfie = null;

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @var PassportFile[]
     */
    public ?array $translation = null;

    /**
     * @param string $type Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     * @param string $hash Base64-encoded element hash for using in PassportElementErrorUnspecified
     * @param string $data Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param string $phone_number Optional. User's verified phone number, available only for “phone_number” type
     * @param string $email Optional. User's verified email address, available only for “email” type
     * @param PassportFile[] $files Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile $front_side Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile $reverse_side Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile $selfie Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     * @param PassportFile[] $translation Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    public static function make(
        string $type,
        string $hash,
        ?string $data = null,
        ?string $phone_number = null,
        ?string $email = null,
        ?array $files = null,
        ?PassportFile $front_side = null,
        ?PassportFile $reverse_side = null,
        ?PassportFile $selfie = null,
        ?array $translation = null
    ): static {
        return new static([
            'type' => $type,
            'hash' => $hash,
            'data' => $data,
            'phone_number' => $phone_number,
            'email' => $email,
            'files' => $files,
            'front_side' => $front_side,
            'reverse_side' => $reverse_side,
            'selfie' => $selfie,
            'translation' => $translation,
        ]);
    }
}
