export async function load( path ){

    const url = `/json/${path}`;
    console.log( url );

    const res = await fetch( url );

    const data = await res.json();

    if (res.ok) {
        return data;
    } else {
        throw new Error(data);
    }
}
