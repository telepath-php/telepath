import winston from "winston";

const logger = winston.createLogger({
    transports: [new winston.transports.File({filename: 'logs/mtproto.log'})]
});

export default logger;