<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Types\Enums;

enum ChatActionType: string
{
    /** for text messages */
    case Typing = 'typing';

    /** for photos */
    case UploadPhoto = 'upload_photo';

    /** for recording videos */
    case RecordVideo = 'record_video';

    /** for uploading videos */
    case UploadVideo = 'upload_video';

    /** for recording voice notes */
    case RecordVoice = 'record_voice';

    /** for uploading voice notes */
    case UploadVoice = 'upload_voice';

    /** for general files */
    case UploadDocument = 'upload_document';

    /** for stickers */
    case ChooseSticker = 'choose_sticker';

    /** for location data */
    case FindLocation = 'find_location';

    /** for recording video notes */
    case RecordVideoNote = 'record_video_note';

    /** for uploading video notes */
    case UploadVideoNote = 'upload_video_note';
}
