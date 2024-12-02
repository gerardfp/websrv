# learn nextjs

https://nextjs.org/learn

# Chapter 1

Crea un proyecto Next.js vacío con las opciones por defecto, e inícialo:

```bash
npx create-next-app@latest a6-nextjs-tutorial --empty --yes

cd a6-nextjs-tutorial

npm run dev
```

# Chapter 2

Instala la librería `clsx`:

```bash
pnpm i clsx
```

Crea un componente `ui/EstadoFactura.tsx` que recibe un



```react
import clsx from "clsx";

export default function EstadoFactura({estado}){
    return (
        <span className={clsx(
            "text-white rounded px-2 py-1",
            {
                "bg-red-500": estado === 'pendiente',
                "bg-green-500": estado === 'pagado'
            }
        )}>
        { estado === 'pendiente' ? (
            <>
            Pendiente ⏳
            </>
            ) : null
        }
        { estado === 'pagado' ? (
            <>
            Pagado ✅
            </>
            ) : null
        }
        </span>
    );
}
```

```
<EstadoFactura estado="pagado" />
<EstadoFactura`estado="pendiente" />
```