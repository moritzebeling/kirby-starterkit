
<script>
  import { Link } from "svelte-routing";

  let className = "";
	export { className as class };
  export let to = "";

  function getProps({ location, href, isPartiallyCurrent, isCurrent }) {
    const isActive = href === "/" ? isCurrent : isPartiallyCurrent || isCurrent;

    className = Array.isArray( className ) ? className : className.split(' ');

    let active = isActive ? ' active' : '';

    return {
      class: className.join(' ') + active
    };
  }
</script>

<Link to="{to}" getProps="{getProps}">
  <slot />
</Link>
