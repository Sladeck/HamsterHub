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
        $__internal_49d07c1c965304d5cab4ec3e9357a0891010d0ddd8c7e8cb7b1caa3005295269 = $this->env->getExtension("native_profiler");
        $__internal_49d07c1c965304d5cab4ec3e9357a0891010d0ddd8c7e8cb7b1caa3005295269->enter($__internal_49d07c1c965304d5cab4ec3e9357a0891010d0ddd8c7e8cb7b1caa3005295269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d07c1c965304d5cab4ec3e9357a0891010d0ddd8c7e8cb7b1caa3005295269->leave($__internal_49d07c1c965304d5cab4ec3e9357a0891010d0ddd8c7e8cb7b1caa3005295269_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_cb5ee41e070d5968c5f954dfc5c26ff682281d47e93194a375926eedd204dc96 = $this->env->getExtension("native_profiler");
        $__internal_cb5ee41e070d5968c5f954dfc5c26ff682281d47e93194a375926eedd204dc96->enter($__internal_cb5ee41e070d5968c5f954dfc5c26ff682281d47e93194a375926eedd204dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["liens"]) {
            // line 6
            echo "
  <div id=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
            echo "\">
    <h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "name", array()), "html", null, true);
            echo "</h1>
    de <a href=\"/myVideo/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "user", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "user", array()), "html", null, true);
            echo "</a> le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["liens"], "date", array()), "d/m/Y"), "html", null, true);
            echo "<br>
    <a href=\"/video/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
            echo "\">
      <figure>
        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "thumbnail", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "name", array()), "html", null, true);
            echo "\"><br>
        <figcaption>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "description", array()), "html", null, true);
            echo "</figcaption>
      </figure>
    </a>


    ";
            // line 18
            if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
                // line 19
                echo "      ";
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($context["liens"], "user", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())))) {
                    // line 20
                    echo "        <form id=\"delete\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["liens"], "id", array()), "html", null, true);
                    echo "\">
          <input type=\"submit\" name=\"delete\" value=\"Supprimer\">
        </form>
      ";
                }
                // line 25
                echo "    ";
            }
            // line 26
            echo "  </div><br><br>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
";
        
        $__internal_cb5ee41e070d5968c5f954dfc5c26ff682281d47e93194a375926eedd204dc96->leave($__internal_cb5ee41e070d5968c5f954dfc5c26ff682281d47e93194a375926eedd204dc96_prof);

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
        return array (  111 => 29,  103 => 26,  100 => 25,  93 => 21,  90 => 20,  87 => 19,  85 => 18,  77 => 13,  71 => 12,  66 => 10,  58 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/* */
/* {% for liens in videos %}*/
/* */
/*   <div id="{{ liens.id }}">*/
/*     <h1>{{ liens.name }}</h1>*/
/*     de <a href="/myVideo/{{ liens.user }}">{{ liens.user }}</a> le {{ liens.date|date("d/m/Y") }}<br>*/
/*     <a href="/video/{{ liens.id }}">*/
/*       <figure>*/
/*         <img src="{{ liens.thumbnail }}" alt="{{ liens.name }}"><br>*/
/*         <figcaption>{{ liens.description }}</figcaption>*/
/*       </figure>*/
/*     </a>*/
/* */
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
/* {% endblock %}*/
/* */
