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
        $__internal_19b113b345713f064a5f7c97b2f9ae3bfa9faf9c328f6eee1985cba86c04c0ec = $this->env->getExtension("native_profiler");
        $__internal_19b113b345713f064a5f7c97b2f9ae3bfa9faf9c328f6eee1985cba86c04c0ec->enter($__internal_19b113b345713f064a5f7c97b2f9ae3bfa9faf9c328f6eee1985cba86c04c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_19b113b345713f064a5f7c97b2f9ae3bfa9faf9c328f6eee1985cba86c04c0ec->leave($__internal_19b113b345713f064a5f7c97b2f9ae3bfa9faf9c328f6eee1985cba86c04c0ec_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_63369d8c797ed1424fc2774de312a68c73009afd2371f760cb8d3c3671f4047d = $this->env->getExtension("native_profiler");
        $__internal_63369d8c797ed1424fc2774de312a68c73009afd2371f760cb8d3c3671f4047d->enter($__internal_63369d8c797ed1424fc2774de312a68c73009afd2371f760cb8d3c3671f4047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_63369d8c797ed1424fc2774de312a68c73009afd2371f760cb8d3c3671f4047d->leave($__internal_63369d8c797ed1424fc2774de312a68c73009afd2371f760cb8d3c3671f4047d_prof);

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
