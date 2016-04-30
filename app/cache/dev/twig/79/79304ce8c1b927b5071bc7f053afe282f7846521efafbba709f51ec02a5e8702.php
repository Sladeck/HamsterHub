<?php

/* @HamsterHub/Base/footer.html.twig */
class __TwigTemplate_8a02b42f383701f1261d3869ccc6d750cc1b5b9a598b99f88b729899f5475f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58244350df96f95699faccdaeefc7ce092f546bbfaa5ae10d5c79be88fdd65cd = $this->env->getExtension("native_profiler");
        $__internal_58244350df96f95699faccdaeefc7ce092f546bbfaa5ae10d5c79be88fdd65cd->enter($__internal_58244350df96f95699faccdaeefc7ce092f546bbfaa5ae10d5c79be88fdd65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_58244350df96f95699faccdaeefc7ce092f546bbfaa5ae10d5c79be88fdd65cd->leave($__internal_58244350df96f95699faccdaeefc7ce092f546bbfaa5ae10d5c79be88fdd65cd_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_7e2a1b365f382fc7ec167843ba9ddf730c8f9b9de04f4ec7dc12aebb77cdf4e9 = $this->env->getExtension("native_profiler");
        $__internal_7e2a1b365f382fc7ec167843ba9ddf730c8f9b9de04f4ec7dc12aebb77cdf4e9->enter($__internal_7e2a1b365f382fc7ec167843ba9ddf730c8f9b9de04f4ec7dc12aebb77cdf4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_7e2a1b365f382fc7ec167843ba9ddf730c8f9b9de04f4ec7dc12aebb77cdf4e9->leave($__internal_7e2a1b365f382fc7ec167843ba9ddf730c8f9b9de04f4ec7dc12aebb77cdf4e9_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block footer %}*/
/*   <footer>*/
/*   <span>created by Clem Ferreol & Guillaume Moulin</span>*/
/* */
/*   </footer>*/
/* {% endblock %}*/
/* */
