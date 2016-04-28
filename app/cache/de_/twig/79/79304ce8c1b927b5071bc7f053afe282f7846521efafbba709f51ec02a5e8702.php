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
        $__internal_d4d3ab7e5b5382acc23f6ac37d3ae4bb8b0774674afec44736a5ed6ca088af8d = $this->env->getExtension("native_profiler");
        $__internal_d4d3ab7e5b5382acc23f6ac37d3ae4bb8b0774674afec44736a5ed6ca088af8d->enter($__internal_d4d3ab7e5b5382acc23f6ac37d3ae4bb8b0774674afec44736a5ed6ca088af8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_d4d3ab7e5b5382acc23f6ac37d3ae4bb8b0774674afec44736a5ed6ca088af8d->leave($__internal_d4d3ab7e5b5382acc23f6ac37d3ae4bb8b0774674afec44736a5ed6ca088af8d_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_b383869a3cdf3e9bba2a629e076c8333e8bc67af4eda74b745ca7dcf7dcb42f7 = $this->env->getExtension("native_profiler");
        $__internal_b383869a3cdf3e9bba2a629e076c8333e8bc67af4eda74b745ca7dcf7dcb42f7->enter($__internal_b383869a3cdf3e9bba2a629e076c8333e8bc67af4eda74b745ca7dcf7dcb42f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_b383869a3cdf3e9bba2a629e076c8333e8bc67af4eda74b745ca7dcf7dcb42f7->leave($__internal_b383869a3cdf3e9bba2a629e076c8333e8bc67af4eda74b745ca7dcf7dcb42f7_prof);

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
