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
        $__internal_df19998ada855900a74ac545694e2491e0be368b0be96671c43031f7d8ffe0d1 = $this->env->getExtension("native_profiler");
        $__internal_df19998ada855900a74ac545694e2491e0be368b0be96671c43031f7d8ffe0d1->enter($__internal_df19998ada855900a74ac545694e2491e0be368b0be96671c43031f7d8ffe0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_df19998ada855900a74ac545694e2491e0be368b0be96671c43031f7d8ffe0d1->leave($__internal_df19998ada855900a74ac545694e2491e0be368b0be96671c43031f7d8ffe0d1_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_43a89b6716b17aa537d332b145ae249aca02658d7a75645278e69a9ad3119b71 = $this->env->getExtension("native_profiler");
        $__internal_43a89b6716b17aa537d332b145ae249aca02658d7a75645278e69a9ad3119b71->enter($__internal_43a89b6716b17aa537d332b145ae249aca02658d7a75645278e69a9ad3119b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_43a89b6716b17aa537d332b145ae249aca02658d7a75645278e69a9ad3119b71->leave($__internal_43a89b6716b17aa537d332b145ae249aca02658d7a75645278e69a9ad3119b71_prof);

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
