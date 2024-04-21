import {Context, Next} from "koa";
import {Api} from "telegram";
import {CustomFile} from "telegram/client/uploads";
import * as fs from "node:fs";
import logger from "../logging";

export default async function sendPhoto(ctx: Context, next: Next) {
    const result = await ctx.telegram.invoke(
        new Api.messages.SendMedia({
            peer: ctx.peer,
            media: new Api.InputMediaUploadedPhoto({
                file: await ctx.telegram.uploadFile({
                    file: new CustomFile(
                        "testphoto.jpeg",
                        fs.statSync("../tests/files/testphoto.jpeg").size,
                        "../tests/files/testphoto.jpeg"
                    ),
                    workers: 1,
                }),
            }),
            message: "Hello, photo!",
        })
    );

    logger.info(result);

    ctx.status = 200;
    await next();
}
