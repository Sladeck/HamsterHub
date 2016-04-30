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
        $__internal_3c288fb3e76fdbe80ac239199e2d7424d26ed47fe7bfa39641319fdcf3eae925 = $this->env->getExtension("native_profiler");
        $__internal_3c288fb3e76fdbe80ac239199e2d7424d26ed47fe7bfa39641319fdcf3eae925->enter($__internal_3c288fb3e76fdbe80ac239199e2d7424d26ed47fe7bfa39641319fdcf3eae925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_3c288fb3e76fdbe80ac239199e2d7424d26ed47fe7bfa39641319fdcf3eae925->leave($__internal_3c288fb3e76fdbe80ac239199e2d7424d26ed47fe7bfa39641319fdcf3eae925_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_141b011214214675473d65f133b7f0f6eff3259e7a2309f1b7682fc157a490cc = $this->env->getExtension("native_profiler");
        $__internal_141b011214214675473d65f133b7f0f6eff3259e7a2309f1b7682fc157a490cc->enter($__internal_141b011214214675473d65f133b7f0f6eff3259e7a2309f1b7682fc157a490cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_141b011214214675473d65f133b7f0f6eff3259e7a2309f1b7682fc157a490cc->leave($__internal_141b011214214675473d65f133b7f0f6eff3259e7a2309f1b7682fc157a490cc_prof);

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
