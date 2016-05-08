<?php

/* HamsterHubBundle:Base:footer.html.twig */
class __TwigTemplate_b5c82734de5ba3acfa0558fdb3ba916a087ace3c50025536fc41a911fb0aaccb extends Twig_Template
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
        $__internal_980fd01dc03977eeb1fbca881daa166ab3a671f16ccc2166fdd20f447da508e6 = $this->env->getExtension("native_profiler");
        $__internal_980fd01dc03977eeb1fbca881daa166ab3a671f16ccc2166fdd20f447da508e6->enter($__internal_980fd01dc03977eeb1fbca881daa166ab3a671f16ccc2166fdd20f447da508e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_980fd01dc03977eeb1fbca881daa166ab3a671f16ccc2166fdd20f447da508e6->leave($__internal_980fd01dc03977eeb1fbca881daa166ab3a671f16ccc2166fdd20f447da508e6_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_a67ae6c722d1a78897acedfd043aba50d02b431d6ed32506522a4a712b35e336 = $this->env->getExtension("native_profiler");
        $__internal_a67ae6c722d1a78897acedfd043aba50d02b431d6ed32506522a4a712b35e336->enter($__internal_a67ae6c722d1a78897acedfd043aba50d02b431d6ed32506522a4a712b35e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_a67ae6c722d1a78897acedfd043aba50d02b431d6ed32506522a4a712b35e336->leave($__internal_a67ae6c722d1a78897acedfd043aba50d02b431d6ed32506522a4a712b35e336_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:footer.html.twig";
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
