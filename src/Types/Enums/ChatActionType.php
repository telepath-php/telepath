<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Types\Enums;

enum ChatActionType: string
{
    /** For text messages */
    case Typing = 'typing';

    /** For photos */
    case UploadPhoto = 'upload_photo';

    /** For recording videos */
    case RecordVideo = 'record_video';

    /** For uploading videos */
    case UploadVideo = 'upload_video';

    /** For recording voice notes */
    case RecordVoice = 'record_voice';

    /** For uploading voice notes */
    case UploadVoice = 'upload_voice';

    /** For general files */
    case UploadDocument = 'upload_document';

    /** For stickers */
    case ChooseSticker = 'choose_sticker';

    /** For location data */
    case FindLocation = 'find_location';

    /** For recording video notes */
    case RecordVideoNote = 'record_video_note';

    /** For uploading video notes */
    case UploadVideoNote = 'upload_video_note';
}
