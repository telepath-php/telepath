import {Api} from "telegram";
import {Context, Next} from "koa";

/**
 * Sends a test message to the bot
 * @param ctx
 * @param next
 * @see https://gram.js.org/tl/messages/SendMessage
 */
export default async function sendMessage(ctx: Context, next: Next) {
    await ctx.telegram.invoke(
        new Api.messages.SendMessage({
            peer: ctx.peer,
            message: 'Hello, world!'
        })
    );

    ctx.status = 200;
    await next();
}