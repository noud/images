
<script>
    const result = [...document.styleSheets[0].rules]
    .reduce((urls, { style }) => {
        var url = style && style.background && style.background.match(/url\(\"(.+)\"\)/);

        url && urls.push(url[1]);
    
        return urls;
    }, []);
    
    console.log(result);
</script>