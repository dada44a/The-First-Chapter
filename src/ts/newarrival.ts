        const scrollContainer:HTMLElement |null= document.getElementById('scrollContainer');
        const scrollLeftBtn:HTMLElement |null = document.getElementById('scrollLeft');
        const scrollRightBtn:HTMLElement |null = document.getElementById('scrollRight');
        const counter:HTMLElement |null = document.getElementById('counter');
        const totalCards:any = document.querySelectorAll('.cards').length;
        const scrollAmount:number = 200; // Adjust the amount to scroll per click
        var count=1;
        
        if(counter)
        {
              counter.innerHTML = `${count}/${totalCards}`;
        }
        scrollLeftBtn?.addEventListener('click', (e) => {
            e.preventDefault();
            
            if(count>1){
            count= count-2;
            if(counter)
                {
                      counter.innerHTML = `${count}/${totalCards}`;
                }
            scrollContainer?.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        });

        scrollRightBtn?.addEventListener('click', (e) => {
            e.preventDefault();
            
            if(count<totalCards-1){
            count= count+2;
            if(counter)
                {
                      counter.innerHTML = `${count}/${totalCards}`;
                }
            scrollContainer?.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        });