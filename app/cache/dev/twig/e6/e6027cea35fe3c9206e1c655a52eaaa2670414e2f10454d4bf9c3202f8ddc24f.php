<?php

/* HamsterHubBundle:Base:index.html.twig */
class __TwigTemplate_586452ee41da97cd68212edb92aab537a0127a96255fd825650d29cafee935b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd1fcbe384077e772a39420dba07489a72ef4a07904aeaeadef04d657e24a16a = $this->env->getExtension("native_profiler");
        $__internal_fd1fcbe384077e772a39420dba07489a72ef4a07904aeaeadef04d657e24a16a->enter($__internal_fd1fcbe384077e772a39420dba07489a72ef4a07904aeaeadef04d657e24a16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:index.html.twig"));

        // line 1
        $this->loadTemplate("HamsterHubBundle:Base:head.html.twig", "HamsterHubBundle:Base:index.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("HamsterHubBundle:Base:menu.html.twig", "HamsterHubBundle:Base:index.html.twig", 2)->display($context);
        // line 3
        echo "
<body>
  <div class=\"container\">
    ";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 9
        echo "  </div>
</body>
";
        // line 11
        $this->loadTemplate("HamsterHubBundle:Base:footer.html.twig", "HamsterHubBundle:Base:index.html.twig", 11)->display($context);
        
        $__internal_fd1fcbe384077e772a39420dba07489a72ef4a07904aeaeadef04d657e24a16a->leave($__internal_fd1fcbe384077e772a39420dba07489a72ef4a07904aeaeadef04d657e24a16a_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_b39a5c39ed2b9b79cea8d575cac373d485ce987be83af1b8327d4873b6e7a5c0 = $this->env->getExtension("native_profiler");
        $__internal_b39a5c39ed2b9b79cea8d575cac373d485ce987be83af1b8327d4873b6e7a5c0->enter($__internal_b39a5c39ed2b9b79cea8d575cac373d485ce987be83af1b8327d4873b6e7a5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "      <span>Texte par défaut</span>
    ";
        
        $__internal_b39a5c39ed2b9b79cea8d575cac373d485ce987be83af1b8327d4873b6e7a5c0->leave($__internal_b39a5c39ed2b9b79cea8d575cac373d485ce987be83af1b8327d4873b6e7a5c0_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  45 => 6,  38 => 11,  34 => 9,  32 => 6,  27 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% include 'HamsterHubBundle:Base:head.html.twig' %}*/
/* {% include 'HamsterHubBundle:Base:menu.html.twig' %}*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     {% block container %}*/
/*       <span>Texte par défaut</span>*/
/*     {% endblock %}*/
/*   </div>*/
/* </body>*/
/* {% include 'HamsterHubBundle:Base:footer.html.twig' %}*/
/* */
