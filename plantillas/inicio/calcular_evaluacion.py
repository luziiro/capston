import sys
import matplotlib.pyplot as plt
import base64

# Verificar que haya suficientes argumentos
if len(sys.argv) != 7:
    print("Faltan argumentos. Uso: calcular_evaluacion.py respuesta1 respuesta2 respuesta3 respuesta4 respuesta5 respuesta6")
    sys.exit(1)

# Obtener argumentos de línea de comandos
respuesta1 = float(sys.argv[1])
respuesta2 = int(sys.argv[2])
respuesta3 = sys.argv[3]
respuesta4 = float(sys.argv[4])
respuesta5 = int(sys.argv[5])
respuesta6 = int(sys.argv[6])

# Realizar cálculos y generar evaluación
# Aquí puedes agregar tu lógica de evaluación
evaluacion = "Tu evaluación de salud: ¡Buena salud!"

# Generar un gráfico de ejemplo (personaliza según tus necesidades)
plt.figure(figsize=(8, 6))
plt.bar(['Respuesta 1', 'Respuesta 2'], [respuesta1, respuesta2])
plt.xlabel('Preguntas')
plt.ylabel('Valores')
plt.title('Gráfico de ejemplo')
plt.tight_layout()

# Guardar el gráfico en un archivo temporal
temp_file = "temp_plot.png"
plt.savefig(temp_file, format='png')
plt.close()

# Codificar el gráfico en base64
with open(temp_file, "rb") as image_file:
    image_data = base64.b64encode(image_file.read()).decode()

# Mostrar evaluación y datos del gráfico separados por ':::'
print(f"{evaluacion}:::{image_data}")

# Eliminar el archivo temporal del gráfico
import os
os.remove(temp_file)
