<?php

namespace Telepath\Support\ParseMode;

enum ParseMode: string
{
    case MarkdownV2 = 'MarkdownV2';

    case HTML = 'HTML';

    case Markdown = 'Markdown';
}
