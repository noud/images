
<script>
    const regex = /url\((.*?)\) format\((\'|\")(.*?)(\'|\")\)/g;
    const str = `CSS Input`;
    let m;

    while ((m = regex.exec(str)) !== null) {
        // This is necessary to avoid infinite loops with zero-width matches
        if (m.index === regex.lastIndex) {
            regex.lastIndex++;
        }
        
        // The result can be accessed through the `m`-variable.
        m.forEach((match, groupIndex) => {
            console.log(`Found match, group ${groupIndex}: ${match}`);
        });
    }

    // const result = [...document.styleSheets[0].rules]
    // .reduce((urls, { style }) => {
    //     // var url = style && style.fontFamily && style.fontFamily;
    //     var url = style && style.font && style.font.match(/url\((.*?)\) format\((\'|\")(.*?)(\'|\")\)/);

    //     url && urls.push(url[1]);
    
    //     return urls;
    // }, []);
    
    // console.log(result);
</script>