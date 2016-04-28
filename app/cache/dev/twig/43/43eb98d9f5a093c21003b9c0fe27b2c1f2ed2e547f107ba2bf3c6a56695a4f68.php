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
        $__internal_5700377865b48b2ec87d3e3fe88a0623cfbc67b5f7382f466821b13302f507d7 = $this->env->getExtension("native_profiler");
        $__internal_5700377865b48b2ec87d3e3fe88a0623cfbc67b5f7382f466821b13302f507d7->enter($__internal_5700377865b48b2ec87d3e3fe88a0623cfbc67b5f7382f466821b13302f507d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_5700377865b48b2ec87d3e3fe88a0623cfbc67b5f7382f466821b13302f507d7->leave($__internal_5700377865b48b2ec87d3e3fe88a0623cfbc67b5f7382f466821b13302f507d7_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_eab3732204c82dcdccbb11b1562e35a4852ca82b09767f05597a81f9c9db639f = $this->env->getExtension("native_profiler");
        $__internal_eab3732204c82dcdccbb11b1562e35a4852ca82b09767f05597a81f9c9db639f->enter($__internal_eab3732204c82dcdccbb11b1562e35a4852ca82b09767f05597a81f9c9db639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_eab3732204c82dcdccbb11b1562e35a4852ca82b09767f05597a81f9c9db639f->leave($__internal_eab3732204c82dcdccbb11b1562e35a4852ca82b09767f05597a81f9c9db639f_prof);

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
