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

    /** Base64-encoded element hash for using in <a href="https://core.telegram.org/bots/api#passportelementerrorunspecified">PassportElementErrorUnspecified</a> */
    public string $hash;

    /** <em>Optional</em>. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>. */
    public ?string $data = null;

    /** <em>Optional</em>. User's verified phone number, available only for “phone_number” type */
    public ?string $phone_number = null;

    /** <em>Optional</em>. User's verified email address, available only for “email” type */
    public ?string $email = null;

    /**
     * <em>Optional</em>. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @var PassportFile[]
     */
    public ?array $files = null;

    /** <em>Optional</em>. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>. */
    public ?PassportFile $front_side = null;

    /** <em>Optional</em>. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>. */
    public ?PassportFile $reverse_side = null;

    /** <em>Optional</em>. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>. */
    public ?PassportFile $selfie = null;

    /**
     * <em>Optional</em>. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @var PassportFile[]
     */
    public ?array $translation = null;

    /**
     * @param string $type Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     * @param string $hash Base64-encoded element hash for using in <a href="https://core.telegram.org/bots/api#passportelementerrorunspecified">PassportElementErrorUnspecified</a>
     * @param string $data <em>Optional</em>. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @param string $phone_number <em>Optional</em>. User's verified phone number, available only for “phone_number” type
     * @param string $email <em>Optional</em>. User's verified email address, available only for “email” type
     * @param PassportFile[] $files <em>Optional</em>. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @param PassportFile $front_side <em>Optional</em>. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @param PassportFile $reverse_side <em>Optional</em>. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @param PassportFile $selfie <em>Optional</em>. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
     * @param PassportFile[] $translation <em>Optional</em>. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying <a href="https://core.telegram.org/bots/api#encryptedcredentials">EncryptedCredentials</a>.
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
        ?array $translation = null,
    ): static
    {
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
