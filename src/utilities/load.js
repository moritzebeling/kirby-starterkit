export async function loadJson( url ){
    const res = await fetch( url );

    const data = await res.json();

    if (res.ok) {
        return data;
    } else {
        throw new Error(data);
    }
}
