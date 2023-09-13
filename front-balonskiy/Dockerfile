# Используем образ Node.js LTS (Long Term Support)
FROM node:16.16.0

# Создаем директорию для приложения
WORKDIR /app

# Копируем файлы package.json и package-lock.json и устанавливаем зависимости
#COPY package*.json ./
COPY . .

RUN ls -lat
# Устанавливаем Vue CLI глобальноd

# Предоставляем права на выполнение скрипта
EXPOSE 8080
# Запускаем команду при старте контейнера
CMD ["npm", "run", "serve"]