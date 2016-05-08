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
        $__internal_266f6ea0f989e575dd81f065c0c31ede12d7060c3ec62051b1aa9821beaad3c9 = $this->env->getExtension("native_profiler");
        $__internal_266f6ea0f989e575dd81f065c0c31ede12d7060c3ec62051b1aa9821beaad3c9->enter($__internal_266f6ea0f989e575dd81f065c0c31ede12d7060c3ec62051b1aa9821beaad3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_266f6ea0f989e575dd81f065c0c31ede12d7060c3ec62051b1aa9821beaad3c9->leave($__internal_266f6ea0f989e575dd81f065c0c31ede12d7060c3ec62051b1aa9821beaad3c9_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_7074210715add8d8853476615d91e64965b76a2c8a5ce693ef035622c5f7c007 = $this->env->getExtension("native_profiler");
        $__internal_7074210715add8d8853476615d91e64965b76a2c8a5ce693ef035622c5f7c007->enter($__internal_7074210715add8d8853476615d91e64965b76a2c8a5ce693ef035622c5f7c007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_7074210715add8d8853476615d91e64965b76a2c8a5ce693ef035622c5f7c007->leave($__internal_7074210715add8d8853476615d91e64965b76a2c8a5ce693ef035622c5f7c007_prof);

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
