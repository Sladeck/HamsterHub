<?php

/* HamsterHubBundle:Default:index.html.twig */
class __TwigTemplate_aa6ae2f5e3bafa5f21d494c29bf14d68a7207c61080e74452df95dc2b8f3f172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle:Base:index.html.twig", "HamsterHubBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27fc726dde743e56639c5d6df80fe09eacc2af690f858db25b477d30c2991373 = $this->env->getExtension("native_profiler");
        $__internal_27fc726dde743e56639c5d6df80fe09eacc2af690f858db25b477d30c2991373->enter($__internal_27fc726dde743e56639c5d6df80fe09eacc2af690f858db25b477d30c2991373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27fc726dde743e56639c5d6df80fe09eacc2af690f858db25b477d30c2991373->leave($__internal_27fc726dde743e56639c5d6df80fe09eacc2af690f858db25b477d30c2991373_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_1354477029d85bb4da598d6ed4b5b972ae42f934fe4967738546e54bcac0d7bd = $this->env->getExtension("native_profiler");
        $__internal_1354477029d85bb4da598d6ed4b5b972ae42f934fe4967738546e54bcac0d7bd->enter($__internal_1354477029d85bb4da598d6ed4b5b972ae42f934fe4967738546e54bcac0d7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "<div class=\"registerPopUp\">
  <div class=\"modal-content\">
    <span class=\"close\">x</span>
    ";
        // line 7
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 8
        echo "  </div>
</div>
<div class=\"loginPopUp\">
  <div class=\"modal-content\">
    <span class=\"close\">x</span>
    ";
        // line 13
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 14
        echo "  </div>
</div>

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["liens"]) {
            // line 18
            echo "
  <div id=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
            echo "\">
    <h1>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "name", array()), "html", null, true);
            echo "</h1>
    de ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "user", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["liens"], "date", array()), "d/m/Y"), "html", null, true);
            echo "<br>
    <iframe width=\"560\" height=\"315\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe><br>

    ";
            // line 24
            if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
                // line 25
                echo "      ";
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["liens"], "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())))) {
                    // line 26
                    echo "        <form id=\"delete\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
                    echo "\">
          <input type=\"submit\" name=\"delete\" value=\"Supprimer\">
        </form>
      ";
                }
                // line 31
                echo "    ";
            }
            // line 32
            echo "  </div><br><br>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
";
        // line 36
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 37
            echo "  <div class=\"uploadPopUp\">
    <form id=\"upload\" method=\"post\" class=\"modal-content\">
      <span class=\"close\">x</span>
        <h1>Mettre un post en ligne : </h1><br>
        <input type=\"text\" name=\"name\" placeholder=\"Titre\"><br><br>
        <input type=\"text\" name=\"url\" placeholder=\"Url\"><br><br>
        <input type=\"submit\" name=\"formVideo\" value=\"OK\">
    </form>
  </div>
";
        }
        // line 47
        echo "
";
        
        $__internal_1354477029d85bb4da598d6ed4b5b972ae42f934fe4967738546e54bcac0d7bd->leave($__internal_1354477029d85bb4da598d6ed4b5b972ae42f934fe4967738546e54bcac0d7bd_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  118 => 37,  116 => 36,  113 => 35,  105 => 32,  102 => 31,  95 => 27,  92 => 26,  89 => 25,  87 => 24,  82 => 22,  76 => 21,  72 => 20,  68 => 19,  65 => 18,  61 => 17,  56 => 14,  54 => 13,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/* <div class="registerPopUp">*/
/*   <div class="modal-content">*/
/*     <span class="close">x</span>*/
/*     {% render url('fos_user_registration_register') %}*/
/*   </div>*/
/* </div>*/
/* <div class="loginPopUp">*/
/*   <div class="modal-content">*/
/*     <span class="close">x</span>*/
/*     {% render url('fos_user_security_login') %}*/
/*   </div>*/
/* </div>*/
/* */
/* {% for liens in videos %}*/
/* */
/*   <div id="{{ liens.id }}">*/
/*     <h1>{{ liens.name }}</h1>*/
/*     de {{ liens.user }} le {{ liens.date|date("d/m/Y") }}<br>*/
/*     <iframe width="560" height="315" src="{{ liens.url }}" frameborder="0" allowfullscreen></iframe><br>*/
/* */
/*     {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*       {% if (is_granted('ROLE_ADMIN')) or (( liens.user ) == ( app.user.username )) %}*/
/*         <form id="delete" method="post">*/
/*           <input type="hidden" name="id" value="{{ liens.id }}">*/
/*           <input type="submit" name="delete" value="Supprimer">*/
/*         </form>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </div><br><br>*/
/* */
/* {% endfor %}*/
/* */
/* {% if ((is_granted("IS_AUTHENTICATED_REMEMBERED")) or (is_granted("IS_AUTHENTICATED_FULLY"))) %}*/
/*   <div class="uploadPopUp">*/
/*     <form id="upload" method="post" class="modal-content">*/
/*       <span class="close">x</span>*/
/*         <h1>Mettre un post en ligne : </h1><br>*/
/*         <input type="text" name="name" placeholder="Titre"><br><br>*/
/*         <input type="text" name="url" placeholder="Url"><br><br>*/
/*         <input type="submit" name="formVideo" value="OK">*/
/*     </form>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
