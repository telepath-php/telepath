import {Context, Next} from "koa";
import {Api} from "telegram";

export default async function editMessage(ctx: Context, next: Next) {
    const result: Api.Updates = await ctx.telegram.invoke(
        new Api.messages.SendMessage({
            peer: ctx.peer,
            message: 'Hello, world!'
        })
    );

    // @ts-ignore
    const messageId = result.updates.find<Api.UpdateMessageID>(update => update.className === 'UpdateMessageID')?.id;

    await ctx.telegram.invoke(
        new Api.messages.EditMessage({
            peer: ctx.peer,
            id: messageId,
            message: 'Goodbye, world!'
        })
    );

    ctx.status = 200;
    await next();
}