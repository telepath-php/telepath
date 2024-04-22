import {Context, Next} from "koa";
import {Api} from "telegram";
import {CustomFile} from "telegram/client/uploads";
import * as fs from "node:fs";

export default async function sendPhoto(ctx: Context, next: Next) {
    await ctx.telegram.invoke(
        new Api.messages.SendMedia({
            peer: ctx.peer,
            media: new Api.InputMediaUploadedPhoto({
                file: await ctx.telegram.uploadFile({
                    file: new CustomFile(
                        "testphoto.jpeg",
                        fs.statSync("../files/send/testphoto.jpeg").size,
                        "../files/send/testphoto.jpeg"
                    ),
                    workers: 1,
                }),
            }),
            message: "Hello, photo!",
        })
    );

    ctx.status = 200;
    await next();
}
