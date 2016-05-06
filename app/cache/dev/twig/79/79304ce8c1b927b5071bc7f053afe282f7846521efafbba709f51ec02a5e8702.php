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
        $__internal_7a78a6a94ec22f770de33a4a10f91def4dc03697679c8a472e06fd4dc6230ede = $this->env->getExtension("native_profiler");
        $__internal_7a78a6a94ec22f770de33a4a10f91def4dc03697679c8a472e06fd4dc6230ede->enter($__internal_7a78a6a94ec22f770de33a4a10f91def4dc03697679c8a472e06fd4dc6230ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_7a78a6a94ec22f770de33a4a10f91def4dc03697679c8a472e06fd4dc6230ede->leave($__internal_7a78a6a94ec22f770de33a4a10f91def4dc03697679c8a472e06fd4dc6230ede_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_a08deebf475883d1fa9f71d48cae4daa848f22b94be0221bd041ee9b45095ee5 = $this->env->getExtension("native_profiler");
        $__internal_a08deebf475883d1fa9f71d48cae4daa848f22b94be0221bd041ee9b45095ee5->enter($__internal_a08deebf475883d1fa9f71d48cae4daa848f22b94be0221bd041ee9b45095ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "  <footer>
  <span>created by Clem Ferreol & Guillaume Moulin</span>

  </footer>
";
        
        $__internal_a08deebf475883d1fa9f71d48cae4daa848f22b94be0221bd041ee9b45095ee5->leave($__internal_a08deebf475883d1fa9f71d48cae4daa848f22b94be0221bd041ee9b45095ee5_prof);

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
